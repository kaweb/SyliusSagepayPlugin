<?php

declare(strict_types=1);

namespace Sbarbat\SyliusSagepayPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Sylius\Bundle\CurrencyBundle\Form\Type\CurrencyChoiceType;


final class SagepayDirectGatewayConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('sandbox', ChoiceType::class, [
                'choices' => [
                    'sbarbat_sylius_sagepay_plugin.ui.test' => true,
                    'sbarbat_sylius_sagepay_plugin.ui.live' => false,
                ],
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.mode',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.mode.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('vendorName', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.vendor_name',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.vendor_name.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('currency', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.currency',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.currency.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('integrationKeyLive', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.integration_key_live',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.integration_key_live.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('integrationPasswordLive', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.integration_password_test',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.integration_password_test.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('integrationKeyTest', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.integration_key_test',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.integration_key_test.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
            ->add('integrationPasswordTest', TextType::class, [
                'label' => 'sbarbat_sylius_sagepay_plugin.ui.integration_password_test',
                'constraints' => [
                    new NotBlank([
                        'message' => 'sbarbat_sylius_sagepay_plugin.integration_password_test.not_blank',
                        'groups' => ['sylius'],
                    ])
                ],
            ])
        ;
    }
}