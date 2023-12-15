from Crypto.Util.number import long_to_bytes,bytes_to_long
import secrets
import random
import memory_profiler

@profile
def xor_bytes(byte_str1, byte_str2):
    result = bytes(x ^ y for x, y in zip(byte_str1, byte_str2))
    return result

@profile
def encryption(msg):
    size = len(msg)
    k = bytes_to_long(secrets.token_bytes(64))
    k_once = k
    key = b''
    diff = 1
    
    while diff != 0 :
        diff = size - len(key)
        random.seed(k_once)
        if diff > 1246:
            key += random.randbytes(1246)
        else:
            key += random.randbytes(diff)
        k_once += 1
    
    assert len(key) == len(msg)
    return xor_bytes(key,msg),k

@profile
def decryption(ct,k):
    
    size = len(ct)
    k_once = k
    diff = 1
    key = b''
    while diff != 0 :
        diff = size - len(key)
        random.seed(k_once)
        if diff > 1246:
            key += random.randbytes(1246)
        else:
            key += random.randbytes(diff)
        k_once += 1
        
    return xor_bytes(key,ct)



if __name__ == '__main__':
    print('Bienvenue dans cet algorithme de chiffrement symétrique.')
    choice = input('Entrez 1 pour chiffrer, 2 pour déchiffrer : ')
    if choice == '1':
        f = input('Entrez le nom de fichier à chiffrer : ')
        ext=f.split('.')[-1]

        with open(f,'rb') as file:
            msg = file.read()
        ct,k = encryption(msg)
        with open('encrypted.'+ext,'w') as encrypted:
            encrypted.write(ct.hex())
        
        print('Votre clé est :',k)
    
    elif choice == '2':
        f = input('Entrez le nom de fichier à déchiffrer : ')
        ext=f.split('.')[-1]
        key = int(input('Entrez votre clé : '))
        f = open(f,'r')
        ct = ''
        for l in f:
            ct += l
        ct = bytes.fromhex(ct)
        msg = decryption(ct,key)
        
        with open('retrieved.'+ext,'wb') as decrypted:
            decrypted.write(msg)