start:
	docker compose up --build -d
	docker exec -i librarify_php /bin/sh < /var/www/librarify/.docker/supervisor.sh

stop:
	docker compose stop

down:
	docker compose down --rmi all

stop-consumers:
	make stop-messenger-consume-create
	make stop-messenger-consume-delete

start-consumers:
	docker exec -i librarify_php /bin/sh < /var/www/librarify/.docker/supervisor.sh

stop-messenger-consume-create:
	docker exec -i librarify_php supervisorctl -c /etc/supervisor/supervisord.conf stop messenger-consume-create:*
stop-messenger-consume-delete:
	docker exec -i librarify_php supervisorctl -c /etc/supervisor/supervisord.conf stop messenger-consume-delete:*


ping-mysql:
	@docker exec librarify_db mysqladmin --user=root --password=chopin --host "127.0.0.1" ping --silent

ping-rabbitmq:
	@docker exec rabbitmq rabbitmqctl ping --silent
