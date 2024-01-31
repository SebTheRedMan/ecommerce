<?php

namespace App\Security\Voter;

use App\Entity\Products;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class ProductsVoter extends Voter
{
    const EDIT = 'PRODUCT_EDIT';
    const DELETE = 'PRODUCT_DELETE';


    public function __construct(private Security $security){}

    protected function supports(string $attribute, $product): bool
    {
        // if (!in_array($attribute, [self::EDIT, self::DELETE]))
        //     return false;
        // if (!$product instanceof Products)
        //     return false;
        // return true;
        return (in_array($attribute, [self::EDIT, self::DELETE])) && ($product instanceof Products);
    }

    protected function voteOnAttribute(
        string $attribute, 
        $product, 
        TokenInterface $token): bool
    {
        // on récupère le user a partir du token
        $user = $token->getUser();

        // si le user n'est pas connecté
        if (!$user instanceof UserInterface)
            return false;

        // on vérifie si le user est admin
        if ($this->security->isGranted('ROLE_ADMIN'))
            return true;

        switch ($attribute){
            case self::EDIT:
                // on vérifie si le user peut éditer
                return $this->canEdit();
                break;
            case self::DELETE:
                // on vérifie si le user peut supprimer
                return $this->canDelete();
                break;
        }
    }

    public function canEdit() : bool {
        return $this->security->isGranted('ROLE_PRODUCT_ADMIN');
    }

    public function canDelete() : bool {
        return $this->security->isGranted('ROLE_PRODUCT_ADMIN');
    }
}