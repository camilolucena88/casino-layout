backend:
	docker-compose build
up:	
	docker-compose up
	
update:
	docker-compose run --rm composer update
	docker-compose run --rm artisan key:generate
	docker-compose run --rm npm install
install:
	cd frontend;npm install
serve:
	cd frontend;npm run serve

down:
	docker-compose down