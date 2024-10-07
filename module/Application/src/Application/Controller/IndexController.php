<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\Query\ResultSetMapping;
use Exception;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $lista = $em->getRepository("Application\Model\Motorista")->findby([], ['motoristaId' => 'ASC']);
        return new ViewModel(array('lista' => $lista));
    }

    public function cadastroAction()
    {
        $request = $this->getRequest();
        $err = '';
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('Application\Model\Veiculo', 'veiculo');
        $rsm->addFieldResult('veiculo', 'veiculo_id', 'veiculoId');
        $rsm->addFieldResult('veiculo', 'placa', 'placa');
        $veiculos = $em->createNativeQuery("SELECT veiculo_id, placa FROM veiculo where veiculo_id not in (select veiculo from motorista where veiculo is not null)", $rsm)->getResult();
        if ($request->isPost()) {
            try {
                $nome = $request->getPost("nome");
                $rg = $request->getPost("rg");
                $cpf = $request->getPost("cpf");
                $telefone = $request->getPost("telefone");
                $veiculoId = $request->getPost("veiculo");
                $veiculo = null;
                if ($veiculoId) {
                    $veiculo = $em->find("Application\Model\Veiculo", $veiculoId);
                }

                $existeCpf = $em->getRepository("Application\Model\Motorista")->findOneby(['cpf' => $cpf]);
                $existeRg = $em->getRepository("Application\Model\Motorista")->findOneby(['rg' => $rg]);

                if ($existeCpf) {
                    throw new Exception("O CPF já está cadastrado");
                }
                if ($existeRg) {
                    throw new Exception("O RG já está cadastrado");
                }
                $motorista = new \Application\Model\Motorista();
                $motorista->setNome($nome);
                $motorista->setRg($rg);
                $motorista->setCpf($cpf);
                $motorista->setTelefone($telefone);
                $motorista->setVeiculo($veiculo);

                $em->persist($motorista);
                $em->flush();

                return $this->redirect()->toRoute(
                    'home',
                    array('controller' => 'index', 'action' => 'index')
                );
            } catch (Exception $e) {
                $err = $e->getMessage();
            }
        }

        return new ViewModel(array('err' => $err, 'veiculos' => $veiculos));
    }

    public function excluirAction()
    {
        $id = $this->params()->fromRoute("id", 0);
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $motorista = $em->find("Application\Model\Motorista", $id);
        $em->remove($motorista);
        $em->flush();

        return $this->redirect()->toRoute(
            'home'
        );
    }

    public function editarAction()
    {
        $id = $this->params()->fromRoute("id", 0);
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $veiculos = $em->getRepository("Application\Model\Veiculo")->findAll();
        $motorista = $em->find("Application\Model\Motorista", $id);
        $err = '';

        $request = $this->getRequest();
        if ($request->isPost()) {
            try {
                $nome = $request->getPost("nome");
                $rg = $request->getPost("rg");
                $cpf = $request->getPost("cpf");
                $telefone = $request->getPost("telefone");
                $veiculo_id = $request->getPost("veiculo");
                $veiculo = null;
                if ($veiculo_id) {
                    $veiculo = $em->find("Application\Model\Veiculo", $veiculo_id);
                }

                $motorista->setNome($nome);
                $motorista->setRg($rg);
                $motorista->setCpf($cpf);
                $motorista->setTelefone($telefone);
                $motorista->setVeiculo($veiculo);

                $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
                $em->merge($motorista);
                $em->flush();

                return $this->redirect()->toRoute(
                    'home',
                    array('controller' => 'index', 'action' => 'index')
                );
            } catch (Exception $e) {
                $err = $e->getMessage();
            }
        }

        return new ViewModel(array('m' => $motorista, 'err' => $err, 'veiculos' => $veiculos));
    }
}
