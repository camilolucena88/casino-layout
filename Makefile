backend:
	docker-compose build
	docker-compose up
	docker-compose run --rm composer update
	docker-compose run --rm composer key:generate
	docker-compose run --rm npm run dev
frontend:
	npm install
	npm run serve

down:
	docker-compose down