<div>
    <div id="message" class="bg-green-450 text-red">
        {{ session('message') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('message').style.display = 'none';
            }, 3000);
        });
    </script>
    <div id="updated" class="bg-green-450 text-red">
        {{ session('updated') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.getElementById('updated').style.display = 'none';
            }, 3000);
        });
    </script>
    <div id="success" class="bg-green-450 text-red">
        {{ session('success') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.getElementById('success').style.display = 'none';
        }, 3000);
    });
    </script>
</div>