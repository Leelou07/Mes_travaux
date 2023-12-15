temps_par_cle = 40 / 100000  # en secondes par clé
duree_totale = 5 * 60 * 60  # 6 heures en secondes

nombre_cles = duree_totale / temps_par_cle

print(f"Vous pouvez générer environ {int(nombre_cles)} clés en 6 heures.")
