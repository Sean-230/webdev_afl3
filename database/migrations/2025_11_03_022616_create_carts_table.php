// database/migrations/xxxx_xx_xx_xxxxxx_create_carts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();

            // optional unique constraint so same user+product appears only once in cart
            $table->unique(['user_id','product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
