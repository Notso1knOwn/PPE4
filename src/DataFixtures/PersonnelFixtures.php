<?php

namespace App\DataFixtures;

use \App\Entity\Personnel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PersonnelFixtures extends Fixture
{
    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $pUser){
        $this->userPasswordEncoder = $pUser;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Personnel();
        $user->setPseudo('user');
        $user->setEmail("user@user.com");
        $user->setPassword($this->userPasswordEncoder->encodePassword($user, "user"));
        $user->setRoles(array("ROLE_USER"));
        $manager->persist($user);

        $admin = new Personnel();
        $admin->setPseudo('root');
        $admin->setEmail('root@root.com');
        $admin->setPassword($this->userPasswordEncoder->encodePassword($admin,'root'));
        $admin->setRoles(array("ROLE_ADMIN"));
        $manager->persist($admin);


        $manager->flush();
    }
}
