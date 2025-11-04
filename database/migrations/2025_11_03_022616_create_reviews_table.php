// database/migrations/xxxx_xx_xx_xxxxxx_create_reviews_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('rating')->unsigned(); // 1-5
            $table->text('comment')->nullable();
            $table->timestamps();

            // optional: prevent duplicate review by same user for same product
            // $table->unique(['user_id','product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
