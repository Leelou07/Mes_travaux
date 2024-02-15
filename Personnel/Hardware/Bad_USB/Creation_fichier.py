import os
import random

# List of animal names
animals = ["lion", "tiger", "elephant", "giraffe", "zebra", "kangaroo", "panda", "koala", "monkey", "penguin", "seal", "walrus", "shark", "whale", "dolphin", "turtle", "frog", "bird", "snake", "fish"]

# Path to the top-level folder
top_level_folder = r"c:\Users\Leelou\Documents\GitHub\enseignement\Personnel\Hardware\Bad_USB\python"

# Create 20 top-level folders
for i in range(20):
    folder_name = f"folder_{i}"
    os.makedirs(os.path.join(top_level_folder, folder_name), exist_ok=True)
    with open(os.path.join(top_level_folder, folder_name, "file.txt"), "w") as f:
        f.write(random.choice(animals) if i % 2 == 0 else "kermit")
        
    # Create 20 subfolders for each top-level folder
    for j in range(20):
        subfolder_name = os.path.join(folder_name, f"subfolder_{j}")
        os.makedirs(os.path.join(top_level_folder, folder_name, subfolder_name), exist_ok=True)
        with open(os.path.join(top_level_folder, folder_name, subfolder_name, "file.txt"), "w") as f:
            f.write(random.choice(animals) if j % 2 == 0 else "kermit")