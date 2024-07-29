#!/bin/bash

# Progetto Chromebook
# Mostrare le reti Wi-Fi in Rofi - v1.0
# Gaudiero Tindaro Vincenzo - tundrasoftware.it

list_wifi() {
    nmcli -f SSID,SECURITY,BARS dev wifi list | grep -v "^--" | grep -v "IN-USE"
}

# Funzione per connettersi alla rete selezionata
connect_wifi() {
    local ssid="$1"

    # Mostra un menu per inserire la password con la barra di input visibile
    local password
    password=$(rofi -dmenu -p -theme-str 'window { children: [inputbar, listview]; } listview { lines:0; }')

    if [ -n "$password" ]; then
        # Tenta di connettersi
        if nmcli dev wifi connect "$ssid" password "$password"; then
            echo "Connected to $ssid" | rofi -dmenu -p "Success"
        else
            echo "Failed to connect to $ssid" | rofi -dmenu -p "Error"
        fi
    else
        echo "No password entered, connection cancelled." | rofi -dmenu -p "Info"
    fi
}

# Menu di selezione con rofi senza barra di ricerca
selected_ssid=$(list_wifi | rofi -dmenu -p 'Select Wi-Fi: ' -no-custom -lines 10 | awk '{print $1}')

# Se è stata selezionata una rete, tenta la connessione
if [ -n "$selected_ssid" ]; then
    connect_wifi "$selected_ssid"
else
    echo "No network selected, connection cancelled." | rofi -dmenu -p "Info"
fi
