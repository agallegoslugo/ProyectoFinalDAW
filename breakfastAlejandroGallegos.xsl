<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Breakfast Alejandro Gallegos</h2>
    <table border="1">
      <tr bgcolor="#93d4e7">
        <th style="text-align:centre">ID</th>
        <th style="text-align:centre">Nombre</th>
        <th style="text-align:centre">Precio</th>
        <th style="text-align:centre">Calorias</th>
      </tr>
      <xsl:for-each select="desayuno/platillo"> 
      <xsl:sort select="precio" order="descending"/>
      <tr>
        <td><xsl:value-of select="@id"/></td>
        <td><xsl:value-of select="nombre"/></td>
        <td><xsl:value-of select="precio"/></td>
        <td><xsl:value-of select="calorias"/></td>
      </tr>
      </xsl:for-each>

      <xsl:value-of select="$precio - 5">
    </table>


  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
