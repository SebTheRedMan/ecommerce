<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Products;
use App\Repository\CategoriesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Positive;

class ProductsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', options: [
                'label'=> 'Nom'
            ])
            ->add('description')
            ->add('price', MoneyType::class, options: [
                'label'=> 'Prix',
                'divisor' => 100,
                'constraints' => [
                    new Positive(
                        message: 'Le prix ne peut être négatif'
                    )
                ]
            ])
            ->add('stock', options: [
                'label'=> 'Quantité en stock'
            ])
            ->add('categories', EntityType::class, [
                'label'=> 'Catégorie',
                'class' => Categories::class,
                'choice_label' => 'name',
                'group_by' => 'parent.name',
                'query_builder' => function(CategoriesRepository $cr) {
                    return $cr->createQueryBuilder('c')
                            ->where('c.parent IS NOT NULL')
                            ->orderBy('c.name', 'ASC');
                }
            ])
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    // en cas d'images multiples => 'multiple' => true,
                    new All (
                        new Image([
                            'maxWidth'=> 1280,
                            'maxWidthMessage' => 'l\'image doit faire {{ max_width }} pixels de large au maximum',
                            'maxHeight' => 1080,
                            'maxHeightMessage' => 'l\'image doit faire {{ max_height }} pixels de hauteur au maximum',
                        ])
                    )
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
