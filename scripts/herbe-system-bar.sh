# Progetto Chromebook
# Info sul sistema in stile notifica - v1.7
# Gaudiero Tindaro Vincenzo - tundrasoftware.it

case "$1" in

  -a)
      pkill herbe & \
      herbe "$(date +'%I:%M %P') $(date +'%a, %d %b') " " "\
            "Batteria: $(cat /sys/class/power_supply/BAT0/capacity)% $(cat /sys/class/power_supply/BAT0/status)" " "\
			"Wifi: $(nmcli -t -f active,ssid dev wifi | grep '^yes' | cut -d: -f2)" " "\
			"$(set -- $(sensors | grep -i core); printf '%s\n' "CPU:$4")" ;;
 -b)
  pkill herbe
      herbe	"Schermo: $(light)%" ;;

 -c)
  pkill herbe
      herbe	"Volume: $(pamixer --get-volume)%" ;;

 -d)
  pkill herbe
      herbe	"Volume: $(pamixer --get-mute)" ;;
 
esac
