<?php

namespace Roberts\Leads\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasPackageFactory;

class LeadBusiness extends BaseModel
{
    use HasPackageFactory;

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
