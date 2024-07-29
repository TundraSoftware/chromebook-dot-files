/*
 * Progetto Chromebook
 * Config di Herbe - v1.5
 * Gaudiero Tindaro Vincenzo - tundrasoftware.it
 */


static const char *background_color = "#B5B5AA";
static const char *border_color = "#2B2B2B";
static const char *font_color = "#2B2B2B";
static const char *font_pattern = "tamzen:size=11";
static const unsigned line_spacing = 5;
static const unsigned int padding = 30;

static const unsigned int width = 250;
static const unsigned int border_size = 5;
static const unsigned int pos_x = 50;
static const unsigned int pos_y = 50;

enum corners { TOP_LEFT, TOP_RIGHT, BOTTOM_LEFT, BOTTOM_RIGHT };
enum corners corner = TOP_RIGHT;

static const unsigned int duration = 2; /* in seconds */

#define DISMISS_BUTTON Button1
#define ACTION_BUTTON Button3
