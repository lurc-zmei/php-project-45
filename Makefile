install: # установка пакетов в /vendor
	composer install
	chmod +x bin/brain-games
	chmod +x bin/brain-even
	chmod +x bin/brain-calc

validate: # проверка файла composer.json
	composer validate

lint: #CodeSniffer
	composer exec --verbose phpcs -- --standard=PSR12 src bin
lint2: #CodeSniffer cbf
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

brain-games: # запуск приветствия
	brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc
