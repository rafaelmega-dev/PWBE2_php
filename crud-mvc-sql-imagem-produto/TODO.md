# Product Image Fix TODO - COMPLETE ✅

1. Create TODO.md ✓
2. Edit views/criarProduto.php (form names: nome, statuspro, imagem) ✓
3. Edit views/listarProduto.php ($p['imagemPro'] → $p['imagem']) ✓
4. Edit views/editarProduto.php ('imagemPro' → 'imagem', statuspro) ✓
5. Test: 
   - Ensure XAMPP running (Apache/MySQL port 3307)
   - http://localhost/PWBE2_php/crud-mvc-sql-imagem-produto/
   - Login as adm
   - Create product with image → saves to img/, lists with <img src="img/xxx.jpg">
   - Edit → preview shows, update image works
6. Mark complete ✓

**Fixed Issues:**
- Images now display in list/edit (DB 'imagem' matches views)
- Upload works (file name="imagem")
- Data consistency (form names match $_POST keys)

