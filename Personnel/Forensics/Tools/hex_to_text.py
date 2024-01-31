#!/usr/bin/env python3
import os

# Séquence hexadécimale
hex_sequence = "504b0304140000000800a231825065235c39420000004700000008001c00666c61672e7478745554090003bfc8855ebfc8855e75780b000104e803000004e80300000dc9c11180300804c0bfd5840408bc33630356e00568c2b177ddef9eeb5a8fe6ee06ce8e5684f0845997192aad44ecaedc7f8e1acc4e3ec1a8eda164d48c28c77b7c504b01021e03140000000800a231825065235c394200000047000000080018000000000001000000a48100000000666c61672e7478745554050003bfc8855e75780b000104e803000004e8030000"

try:
    # Conversion hexadécimale
    data = bytes.fromhex(hex_sequence)

    # Obtenir le répertoire du script
    script_dir = os.path.dirname(os.path.realpath(__file__))

    # Chemin complet du fichier de sortie
    output_path = os.path.join(script_dir, "flag.zip")

    # Écriture dans le fichier
    with open(output_path, "wb") as f:
        f.write(data)
    
    print(f"Fichier écrit avec succès à : {output_path}")
except ValueError as e:
    print(f"Erreur lors de la conversion hexadécimale : {e}")
except Exception as ex:
    print(f"Erreur inattendue : {ex}")
