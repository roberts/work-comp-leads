<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Roberts\Leads\Models\LeadType;

class CreateLeadStepsTable extends Migration
{
    public function up()
    {
        Schema::create('lead_steps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('number');
            $table->foreignIdFor(LeadType::class);
            $table->timestamps();

            $table->unique(['slug', 'lead_type_id']);
            $table->unique(['number', 'lead_type_id']);
        });
    }
}
