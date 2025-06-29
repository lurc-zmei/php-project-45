install: # установка пакетов в /vendor
	composer install

validate: # проверка файла composer.json
	composer validate

lint: #CodeSniffer
	composer exec --verbose phpcs -- --standard=PSR12 src bin
lint-fix: #CodeSniffer cbf
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

brain-games: # запуск приветствия
	brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime