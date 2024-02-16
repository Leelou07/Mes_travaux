#!/usr/bin/env python3
import os

def get_hex_sequence_from_user():
    hex_sequence = input("Veuillez entrer la séquence hexadécimale : ").strip()
    return hex_sequence

try:
    # Demander la séquence hexadécimale à l'utilisateur
    hex_sequence = get_hex_sequence_from_user()

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
