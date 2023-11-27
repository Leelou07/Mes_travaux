def chiffrement_cesar(message, clef):
    new_message = ""

    # Parcourir chaque caractère dans le message
    for char in message:
        if char.isalpha():
            # Gérer le décalage pour les lettres de l'alphabet
            debut_alphabet = ord('a') if char.islower() else ord('A')
            new_message += chr((ord(char) - debut_alphabet + clef) % 26 + debut_alphabet)
        else:
            # Ne chiffrer que les lettres, laisser les autres caractères inchangés
            new_message += char

    return new_message

def obtenir_clef():
    while True:
        try:
            # Obtenir une clé de l'utilisateur, gérer les erreurs si ce n'est pas un entier
            clef = int(input("Donne moi une clef: "))
            return clef
        except ValueError:
            print("La clef doit être un nombre entier.")

# Demander à l'utilisateur d'entrer un message
message = input("Quel est ton message ? ")

# Obtenir la clé de l'utilisateur
clef = obtenir_clef()

# Chiffrer le message
message_chiffre = chiffrement_cesar(message, clef)

# Afficher les résultats
print("Message original:", message)
print("Message chiffré:", message_chiffre)
