<?php

declare(strict_types=1);

namespace JasiriLabs\SwahibaSms;


class SwahibaSms implements SwahibaSmsOperator
{
    /**
     * @var SwahibaSmsAdapter
     */
    private SwahibaSmsAdapter $adapter;

    public function __construct(
        SwahibaSmsAdapter $adapter,
    ) {
        $this->adapter = $adapter;
    }

    /**
     * @param  string|array  $phoneNumber
     * @param  string|array  $message
     * @return SendSmsResponse
     */
    public function send(string|array $phoneNumber, string|array $message): SendSmsResponse
    {
        return $this->adapter->send($phoneNumber, $message);
    }

    /**
     * @param  string|array  $phoneNumber
     * @param  string|array  $message
     * @param  array  $params
     * @return ScheduleSmsResponse
     */
    public function schedule(string|array $phoneNumber, string|array $message, array $params): ScheduleSmsResponse
    {
        return $this->adapter->schedule($phoneNumber, $message, $params);
    }

    /**
     * @param  array|null  $params
     * @return DeliveryReportResponse
     */
    public function deliveryReport(array|null $params = null): DeliveryReportResponse
    {
        return $this->adapter->deliveryReport($params);
    }

    /**
     * @return SmsBalanceResponse
     */
    public function balance(): SmsBalanceResponse
    {
        return $this->adapter->balance();
    }
}
