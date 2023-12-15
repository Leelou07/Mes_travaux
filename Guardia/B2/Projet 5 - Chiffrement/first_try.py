from cryptography.hazmat.backends import default_backend
from cryptography.hazmat.primitives.ciphers import Cipher, algorithms, modes
from cryptography.hazmat.primitives import hashes
from cryptography.hazmat.primitives.kdf.pbkdf2 import PBKDF2HMAC
import os

# Fonction pour générer une clé dérivée du mot de passe et du sel
def generate_key(password, salt):
    kdf = PBKDF2HMAC(
        algorithm=hashes.SHA256(),
        length=32,
        salt=salt,
        iterations=100000,  
        backend=default_backend()
    )
    key = kdf.derive(password.encode())
    return key

# Fonction pour chiffrer le texte en clair
def encrypt(plaintext, password):
    # Générer un sel aléatoire
    salt = os.urandom(16)
    # Générer une clé dérivée du mot de passe et du sel
    key = generate_key(password, salt)
    # Générer un IV aléatoire
    iv = os.urandom(16)
    # Initialisation du chiffreur avec l'algorithme AES en mode GCM et l'IV
    cipher = Cipher(algorithms.AES(key), modes.GCM(iv), backend=default_backend())
    encryptor = cipher.encryptor()
    # Chiffrer le texte en clair
    ciphertext = encryptor.update(plaintext.encode()) + encryptor.finalize()
    # Obtenir le tag de l'opération de chiffrement
    tag = encryptor.tag
    # Retourner le texte chiffré, le sel, l'IV et le tag
    return salt + iv + tag + ciphertext

# Fonction pour déchiffrer le texte chiffré
def decrypt(ciphertext, password):
    # Extraire le sel, l'IV, le tag et le texte chiffré à partir de la donnée chiffrée
    salt = ciphertext[:16]
    iv = ciphertext[16:32]
    tag = ciphertext[32:48]
    ciphertext = ciphertext[48:]
    # Générer une clé dérivée du mot de passe et du sel
    key = generate_key(password, salt)
    # Initialisation du déchiffreur avec l'algorithme AES en mode GCM, l'IV et le tag
    cipher = Cipher(algorithms.AES(key), modes.GCM(iv, tag), backend=default_backend())
    decryptor = cipher.decryptor()
    # Déchiffrer le texte chiffré
    plaintext = decryptor.update(ciphertext) + decryptor.finalize()
    # Retourner le texte déchiffré
    return plaintext.decode()


def main():
    password = input("Votre mot de passe : ")
    plaintext = input("Votre message : ")

    while True:
        user_choice = input("Chiffrer 'C' / Déchiffrer 'D' / Quitter 'Q' : ").upper()

        if user_choice == "C":
            ciphertext = encrypt_and_display(plaintext, password)
        elif user_choice == "D":
            decrypt_and_display(ciphertext, password)
        elif user_choice == "Q":
            break
        else:
            print("Choix invalide. Veuillez choisir entre 'C', 'D' ou 'Q'.")

def encrypt_and_display(plaintext, password):
    print("Plaintext:", plaintext)
    ciphertext = encrypt(plaintext, password)
    print("Ciphertext:", ciphertext)
    return ciphertext

def decrypt_and_display(ciphertext, password):
    ciphertext2 = str(input("Votre message chiffré: "))
    password2 = str(input("Votre mot de passe: "))
    print(ciphertext)
    print(ciphertext2)
    print(password)
    print(password2)

    decrypted_text = decrypt(ciphertext, password)
    print("Decrypted Text:", decrypted_text)

if __name__ == "__main__":
    main()

    