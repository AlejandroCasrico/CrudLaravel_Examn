<div>
    <div>
        <div id="create" class="bg-green-450 text-red">
            {{ session('create') }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(() => {
                    document.getElementById('create').style.display = 'none';
                }, 3000);
            });
        </script>
        <div id="updatedProduct" class="bg-green-450 text-red">
            {{ session('updateProduct') }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(() => {
                    document.getElementById('updatedProduct').style.display = 'none';
                }, 3000);
            });
        </script>
        <div id="deletedProduct" class="bg-green-450 text-red">
            {{ session('deletedProduct') }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('deletedProduct').style.display = 'none';
            }, 3000);
        });
        </script>
    </div>
</div>