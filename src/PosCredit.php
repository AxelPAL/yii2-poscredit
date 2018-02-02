<?php
/**
 * @link https://github.com/AxelPAL/yii2-poscredit
 * @copyright Copyright (c) 2018 AxelPAL
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace AxelPAl\yii2\PosCredit;

use AxelPAL\PosCredit\LoanService;
use AxelPAL\PosCredit\Requests\StatusShortOptyRequest;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Yii2 Component for PosCredit integration.
 *
 * @author AxelPAL
 * @package AxelPAl\yii2\PosCredit
 */
class PosCredit extends Component
{
    /** @var string PosCredit User id */
    public $userId;

    /** @var string PosCredit User token */
    public $userToken;

    /** @var LoanService */
    public $loanService = null;

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        if (empty($this->userId)) {
            throw new InvalidConfigException('Required `usedId` param isn\'t set.');
        }
        if (empty($this->userToken)) {
            throw new InvalidConfigException('Required `userToken` param isn\'t set.');
        }
        $this->loanService = new LoanService();
    }

    /**
     * @param $profileId
     * @return \AxelPAL\PosCredit\Responses\StatusShortOptyResponse
     */
    public function getStatusShort($profileId)
    {
        $statusRequest = new StatusShortOptyRequest($this->userId, $this->userToken, $profileId);
        return $this->loanService->statusShortOpty($statusRequest);
    }
}