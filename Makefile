install: # установка пакетов в /vendor
	composer install

validate: # проверка файла composer.json
	composer validate

brain-games: # запуск приветствия
	chmod +x bin/brain-games
	brain-games
