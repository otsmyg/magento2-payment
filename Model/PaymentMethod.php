<?php

namespace JohnDoe\CustomPayment\Model;

class PaymentMethod extends \Magento\Payment\Model\Method\AbstractMethod
{
    protected $_code = 'custompayment';

    /**
     * Payment Method features
     *
     * @var bool
     */
    protected $_canAuthorize = true;

    /**
     * Authorize payment abstract method
     *
     * @param \Magento\Framework\DataObject|InfoInterface $payment
     * @param float $amount
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     * @api
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        if (!$this->canAuthorize()) {
            throw new \Magento\Framework\Exception\LocalizedException(__('The authorize action is not available.'));
        }
        return $this;
    }

    /**
     * Return title of payment method
     *
     * @return string
     */
    public function getTitle()
    {
        $title = $this->_scopeConfig->getValue('payment/custompayment/title');
        return ($title)? $title : __('Custom Payment');
    }
}

