<?php

namespace App\Service;

class BidService
{
    const BID_ACTIVE_STATUS = 1;
    const BID_DRAFT_STATUS = 2;
    const BID_COMPLETE_STATUS = 3;
    const BID_REJECT_STATUS = 4;
    const BID_IN_PROGRESS_STATUS = 5;


    const PROJECT_PENDING_STATUS = 0;
    const PROJECT_ACTIVE_STATUS = 1;
    const PROJECT_REJECT_STATUS = 2;
}
