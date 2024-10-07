<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Exception;

class VeiculoController extends AbstractActionController
{
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $lista = $em->getRepository("Application\Model\Veiculo")->findAll();
        return new ViewModel(array('lista' => $lista));
    }

    public function cadastroAction()
    {
        $request = $this->getRequest();
        $err = '';
        if ($request->isPost()) {
            try {
                $placa = $request->getPost("placa");
                $renavam = $request->getPost("renavam");
                $modelo = $request->getPost("modelo");
                $marca = $request->getPost("marca");
                $ano = $request->getPost("ano");
                $cor = $request->getPost("cor");

                $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
                $existePlaca = $em->getRepository("Application\Model\Veiculo")->findOneby(['placa' => $placa]);
                $existeRenavam = $em->getRepository("Application\Model\Veiculo")->findOneby(['renavam' => $renavam]);

                if ($existePlaca) {
                    throw new Exception("A Placa já está cadastrada");
                }
                if ($existeRenavam) {
                    throw new Exception("O Rnavam já está cadastrado");
                }

                $veiculo = new \Application\Model\Veiculo();
                $veiculo->setPlaca($placa);
                $veiculo->setRenavam($renavam);
                $veiculo->setModelo($modelo);
                $veiculo->setMarca($marca);
                $veiculo->setAno($ano);
                $veiculo->setCor($cor);


                $em->persist($veiculo);
                $em->flush();

                return $this->redirect()->toRoute(
                    'veiculos',
                    array('controller' => 'veiculo', 'action' => 'index')
                );
            } catch (Exception $e) {
                $err = $e->getMessage();
            }
        }

        return new ViewModel(array('err' => $err));
    }

    public function excluirAction()
    {
        $id = $this->params()->fromRoute("id", 0);
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $veiculo = $em->find("Application\Model\Veiculo", $id);
        $em->remove($veiculo);
        $em->flush();

        return $this->redirect()->toRoute(
            'veiculos'
        );
    }

    public function editarAction()
    {
        $id = $this->params()->fromRoute("id", 0);
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $veiculo = $em->find("Application\Model\Veiculo", $id);
        $err = '';

        $request = $this->getRequest();
        if ($request->isPost()) {
            try {
                $placa = $request->getPost("placa");
                $renavam = $request->getPost("renavam");
                $modelo = $request->getPost("modelo");
                $marca = $request->getPost("marca");
                $ano = $request->getPost("ano");
                $cor = $request->getPost("cor");

                $veiculo->setPlaca($placa);
                $veiculo->setRenavam($renavam);
                $veiculo->setModelo($modelo);
                $veiculo->setMarca($marca);
                $veiculo->setAno($ano);
                $veiculo->setCor($cor);

                $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
                $em->merge($veiculo);
                $em->flush();

                return $this->redirect()->toRoute(
                    'veiculos',
                    array('controller' => 'veiculo', 'action' => 'index')
                );
            } catch (Exception $e) {
                $err = $e->getMessage();
            }
        }

        return new ViewModel(array('m' => $veiculo, 'err' => $err));
    }
}