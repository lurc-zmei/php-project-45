install: # установка пакетов в /vendor
	composer install

brain-games: # запуск приветствия
	chmod +x bin/brain-games
	brain-games

validate: # проверка файла .json
	composer validate
	
lint: # CodeSniffer
	composer exec --verbose phpcs -- --standard=PSR12 src bin
	
