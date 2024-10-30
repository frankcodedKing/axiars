<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // NFT name
            $table->string('image');               // NFT image path
            $table->text('description');           // NFT description
            $table->unsignedBigInteger('owner_id');// NFT owner (user ID)
            $table->integer('supply');             // Total supply of the NFT
            $table->decimal('price', 8, 2)->default(0); // Default price set to $0
            $table->boolean('sale_status')->default(0); // Sale status default 0 (not for sale)
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}
