import zipfile
import os

def brute_force_number(zip_path):
    print()

def verify_if_zip_pass(zip_path):
    try:
        with zipfile.ZipFile(zip_path, 'r') as archive:
            # Try to extract with an empty password
            extract_path = os.path.dirname(zip_path)
            archive.extractall(path=extract_path, pwd=None)

            print("The ZIP file is not protected by a password.")
            
    except RuntimeError as e:
        if "Bad password" in str(e):
            print("The ZIP file is protected by a password.")
        else:
            print(f"An error occurred: {e}")
    except zipfile.BadZipFile:
        print("The specified file is not a valid ZIP file.")
    except zipfile.LargeZipFile:
        print("The ZIP file is too large to be processed.")
    except Exception as e:
        print(f"An error occurred: {e}")

def verify_zip_file(zip_path):
    try:
        with zipfile.ZipFile(zip_path, 'r') as archive:
            print()
        print("Extraction successful.")
    except zipfile.BadZipFile:
        print("The specified file is not a valid ZIP file.")
    except zipfile.LargeZipFile:
        print("The ZIP file is too large to be processed.")
    except zipfile.ZipFile.extractall.PasswordRequired:
        print("The ZIP file is protected by an incorrect password.")
    except Exception as e:
        print(f"An error occurred: {e}")
        

        
def main():
    print(""""
$$$$$$$\                        $$\               $$$$$$$$\                                      $$$$$$$$\ $$\           
$$  __$$\                       $$ |              $$  _____|                                     \____$$  |\__|          
$$ |  $$ | $$$$$$\  $$\   $$\ $$$$$$\    $$$$$$\  $$ |    $$$$$$\   $$$$$$\   $$$$$$$\  $$$$$$\      $$  / $$\  $$$$$$\  
$$$$$$$\ |$$  __$$\ $$ |  $$ |\_$$  _|  $$  __$$\ $$$$$\ $$  __$$\ $$  __$$\ $$  _____|$$  __$$\    $$  /  $$ |$$  __$$\ 
$$  __$$\ $$ |  \__|$$ |  $$ |  $$ |    $$$$$$$$ |$$  __|$$ /  $$ |$$ |  \__|$$ /      $$$$$$$$ |  $$  /   $$ |$$ /  $$ |
$$ |  $$ |$$ |      $$ |  $$ |  $$ |$$\ $$   ____|$$ |   $$ |  $$ |$$ |      $$ |      $$   ____| $$  /    $$ |$$ |  $$ |
$$$$$$$  |$$ |      \$$$$$$  |  \$$$$  |\$$$$$$$\ $$ |   \$$$$$$  |$$ |      \$$$$$$$\ \$$$$$$$\ $$$$$$$$\ $$ |$$$$$$$  |
\_______/ \__|       \______/    \____/  \_______|\__|    \______/ \__|       \_______| \_______|\________|\__|$$  ____/ 
                                                                                                               $$ |      
                                                                                                               $$ |      
                                                                                                               \__|      
$$$$$$$\                  $$\   $$\          $$\ $$\            $$$$$$\  $$$$$$$$\                                       
$$  __$$\                 $$ | $$  |         $$ |$$ |          $$$ __$$\ \____$$  |                                      
$$ |  $$ |$$\   $$\       $$ |$$  / $$$$$$\  $$ |$$ |$$\   $$\ $$$$\ $$ |    $$  /                                       
$$$$$$$\ |$$ |  $$ |      $$$$$  / $$  __$$\ $$ |$$ |$$ |  $$ |$$\$$\$$ |   $$  /                                        
$$  __$$\ $$ |  $$ |      $$  $$<  $$$$$$$$ |$$ |$$ |$$ |  $$ |$$ \$$$$ |  $$  /                                         
$$ |  $$ |$$ |  $$ |      $$ |\$$\ $$   ____|$$ |$$ |$$ |  $$ |$$ |\$$$ | $$  /                                          
$$$$$$$  |\$$$$$$$ |      $$ | \$$\\$$$$$$$\ $$ |$$ |\$$$$$$$ |\$$$$$$  /$$  /                                           
\_______/  \____$$ |      \__|  \__|\_______|\__|\__| \____$$ | \______/ \__/                                            
          $$\   $$ |                                 $$\   $$ |                                                          
          \$$$$$$  |                                 \$$$$$$  |                                                          
           \______/                                   \______/                                                           
""")
    
    #brute_force_type = int(input("What did you want to test: (1)Number, (2)Letter, (3)Number&Letter, (4)Dictionary: "))
    #zip_path = str(input("What is your zipfile path? "))
    brute_force_type = 1
    zip_path = r"C:\Users\Leelou\Documents\GitHub\enseignement\Personnel\MyTools\HelloHard.zip"
    verify_if_zip_pass(zip_path)
    verify_zip_file(zip_path)

    if brute_force_type == 1:
        brute_force_number(zip_path)
    else:
        print("Not implemented yet")

if __name__ == "__main__":
    # Appel de la fonction main
    main()