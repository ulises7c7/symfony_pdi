<?php
namespace DonCar\PDIBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class UsuarioType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('username');
        $builder->add('password', 'password');
        $builder->add('nombre');
        $builder->add('apellido');
    }

    public function getName(){
        return 'nombre';
    }
}

?>
