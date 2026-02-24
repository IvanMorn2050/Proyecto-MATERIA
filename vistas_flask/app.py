from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def login():
    return render_template("login.html")

@app.route("/register")
def register():
    return render_template("register.html")

@app.route("/catalogo")
def catalogo():
    return render_template("catalogo.html")

@app.route("/pedidos")
def pedidos():
    return render_template("pedidos.html")

@app.route("/carrito")
def carrito():
    return render_template("carrito.html")

@app.route("/detalle")
def detalle():
    return render_template("detalle.html")

if __name__ == "__main__":
    app.run(debug=True)