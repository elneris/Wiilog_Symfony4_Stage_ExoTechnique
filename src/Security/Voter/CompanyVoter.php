<?php

namespace App\Security\Voter;

use App\Entity\Company;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class CompanyVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        return in_array($attribute, ['EDIT', 'DELETE', 'CREATE'])
            && $subject instanceof Company;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        switch ($attribute) {
            case 'EDIT':
                if ('ROLE_ADMIN' === $user->getRoles()[0]){
                    return true;
                }
                break;
            case 'DELETE':
                if ('ROLE_ADMIN' === $user->getRoles()[0]){
                    return true;
                }
                break;
            case 'CREATE':
                if ('ROLE_ADMIN' === $user->getRoles()[0]){
                    return true;
                }
                break;
        }
        return false;
    }
}
