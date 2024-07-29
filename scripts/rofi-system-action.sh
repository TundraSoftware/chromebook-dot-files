#!/bin/bash

# Progetto Chromebook
# System Action in Rofi - v1.3
# Gaudiero Tindaro Vincenzo - tundrasoftware.it


# Opzioni del menu
options="Shutdown\nReboot\nLogout"

# Usa rofi per mostrare il menu e ottenere la scelta dell'utente
chosen=$(echo -e "$options" | rofi -dmenu -theme-str 'listview {lines:3;}')

# Esegui l'azione selezionata
case "$chosen" in
    "Shutdown")
        # Spegni il computer
        loginctl poweroff
        ;;
    "Reboot")
        # Riavvia il computer
        loginctl reboot
        ;;
    "Logout")
        # Fai il logout (per i3 usa il comando specifico per fare il logout)
        i3-msg exit
        ;;
    *)
        # Se nessuna opzione è selezionata, esci
        exit 1
        ;;
esac
