backend:
	docker-compose build
	docker-compose up
	docker-compose run --rm composer update
	docker-compose run --rm npm run dev
frontend:
	npm 