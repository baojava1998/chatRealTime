# chatRealTime
# B1: If you use window. Download and install redis https://github.com/microsoftarchive/redis/releases 
warning. Please tick the Redis installation folder to the PATH when install
# B2: Install predis in project: composer require predis/predis 
# B3: Save as .env.exampele. rename to .env
# B3: Edit Env at : 
BROADCAST_DRIVER=redis
CACHE_DRIVER=redis
QUEUE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
# B4: install Socket io, redis io : npm install socket.io ioredis
# B5: run migration : php artisan migrate
# B6: run redis server : redis-server --port 1000
# B7: Clean cache: php artisan config:cache   .    php artisan cache:clear
# B8: In the directory server_node, run node server: node server
# B9: run event queue : php artisan queue:listen
FINISH                    
