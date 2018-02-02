<?php
/**
 * Yii2 Component for PosCredit integration.
 * @package AxelPAL\yii2\PosCredit
 * @author AxelPAL <axelpal@gmail.com>
 * @copyright 2018 AxelPAL
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://github.com/AxelPAL/yii2-poscredit
 */

namespace AxelPAL\yii2;

use AxelPAL\PosCredit\LoanService;
use AxelPAL\PosCredit\Requests\StatusShortOptyRequest;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Yii2 Component for PosCredit integration.
 *
 * @package AxelPAL\yii2\PosCredit
 * @author  AxelPAL <axelpal@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link    https://github.com/AxelPAL/yii2-poscredit
 */
class PosCredit extends Component
{
    /**
     * User id in PosCredit
     *
     * @var string PosCredit User id 
     */
    public $userId;

    /**
     * User token in PosCredit
     *
     * @var string PosCredit User token 
     */
    public $userToken;

    /**
     * Service to make requests
     *
     * @var LoanService 
     */
    public $loanService = null;

    /**
     * Check required attributes
     *
     * @throws InvalidConfigException
     * @return void
     */
    public function init()
    {
        if (empty($this->userId)) {
            throw new InvalidConfigException(
                'Required `usedId` param isn\'t set.'
            );
        }
        if (empty($this->userToken)) {
            throw new InvalidConfigException(
                'Required `userToken` param isn\'t set.'
            );
        }
        $this->loanService = new LoanService();
    }

    /**
     * Get status of Profile
     *
     * @param int $profileId Id of profile
     *
     * @return \AxelPAL\PosCredit\Responses\StatusShortOptyResponse
     */
    public function getStatusShort($profileId)
    {
        $statusRequest = new StatusShortOptyRequest(
            $this->userId,
            $this->userToken,
            $profileId
        );
        return $this->loanService->statusShortOpty($statusRequest);
    }
}
