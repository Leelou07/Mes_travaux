import secrets
import time

def generate_key(length=128):
    # Génère une clé hexadécimale aléatoire
    return hex(secrets.randbits(length * 4))[2:]

def save_key(key, file):
    # Enregistre la clé dans le fichier spécifié
    file.write(key + '\n')

def generate_and_save_keys(total_keys):
    start_time = time.time()

    # Charge les clés existantes dans un ensemble (set)
    with open('clefs.txt', 'r') as file:
        existing_keys = set(line.strip() for line in file)

    # Génère et sauvegarde les clés
    with open('clefs.txt', 'a') as file:
        for _ in range(total_keys):
            new_key = generate_key()
            if new_key not in existing_keys:
                save_key(new_key, file)
                existing_keys.add(new_key)
                print(f"Clé générée et sauvegardée : {new_key}")
            else:
                print("Clé déjà existante, en générer une nouvelle.")

    end_time = time.time()
    elapsed_time = end_time - start_time
    print(f"Temps d'exécution : {elapsed_time:.2f} secondes")

def main():
    # Nombre total de clés à générer
    total_keys = 100000
    generate_and_save_keys(total_keys)

if __name__ == '__main__':
    main()
