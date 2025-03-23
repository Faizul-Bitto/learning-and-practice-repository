def main():
    canvas = canvas(800, 200)
    canvas.create_rectangle(20, 20, 100, 100, "blue")

    # canvas(800, 200) -> create a canvas frame of (width 500 and height 200)

    # these(20, 20, 100, 100, "blue") -> are are locations and color
    # TK Natural Graphics

    # (40,    20)
    # width, height

    # (0,         0               ,500,      500,          "blue")
    # left_x,    top_y,           right_x,   bottom_y
    # Width,     height   to      width,     height,       color

    # canvas.create_image(10, 180, "simba.png") -> for creating image
    # canvas.create_text(50, 20, "Hello World!", color = 'blue', font = 'courier', font_size = 20) -> for creating text, with color, font and font size
