<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedido de Serviço - Bar Móvel</title>
  <link rel="stylesheet" href="../CSS/formulario.css">
</head>
<body>
  <div class="container">
    <h1>Pedido de Serviço - Bar Móvel</h1>
      <h2>Detalhes do Evento</h2>
      <label for="eventDate">Data do Evento:</label>
      <input type="date" id="eventDate" required>

      <label for="eventTime">Horário do Evento:</label>
      <input type="time" id="eventTime" required>

      <label for="eventLocation">Local do Evento:</label>
      <input type="text" id="eventLocation" placeholder="Endereço completo" required>

      <label for="guestCount">Quantidade de Convidados:</label>
      <input type="number" id="guestCount" min="1" required>

      <h2>Configuração do Bar</h2>
      <label for="extraItems">Itens Extras:</label>
      <input type="text" id="extraItems" placeholder="Copos personalizados, decoração etc.">

      <label for="tablesRequired">Necessidade de Mesas ou Estações Adicionais:</label>
      <input type="checkbox" id="tablesRequired">

      <h2>Informações de Contato e Logística</h2>
      <label for="organizerName">Nome do Organizador:</label>
      <input type="text" id="organizerName" required>

      <label for="organizerContact">Contato do Organizador:</label>
      <input type="tel" id="organizerContact" required>

      <h2>Outras Preferências ou Restrições</h2>
      <label for="specialRequests">Restrições ou Necessidades Específicas:</label>
      <textarea id="specialRequests" placeholder="Ex.: acessibilidade, limite de bebidas para menores"></textarea>

      <form id="serviceForm" action="../HTML/cerveja.html" method="get">
        <button type="submit">Enviar Pedido</button>
  </div>

  <script src="../Javascript/formulario.js"></script>
</body>
</html>
