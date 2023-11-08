<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="dist/css/ProyectoF.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-icons-1.10.3/bootstrap-icons.css">
  <script src="dist/js/bootstrap.bundle.js"></script>
  <script src="bootstrap-5.3.0-alpha1/bootstrap-5.3.0-alpha1-examples/sidebars/sidebars.css"></script>
  <TItle>Metrópolis</TItle>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
      </path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
      <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
      <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
      <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
      <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
      <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
      <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
      <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
      <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
    </symbol>
  </svg>


  <nav class="navbar navbar-expand-lg bg-body-tertiary minav" style="margin-top: -10px;">
    <div class="container-fluid nav " id="midiv">
      <a class="navbar-brand" href="#">
        <div id="nSuper"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
            <path d="M42 22.05V39q0 1.2-.9 2.1-.9.9-2.1.9H8.95q-1.2 0-2.1-.9-.9-.9-.9-2.1V22.05q-1.4-1.2-1.85-2.95-.45-1.75.1-3.5l2.15-6.75q.4-1.35 1.4-2.1 1-.75 2.3-.75H37.7q1.4 0 2.45.775 1.05.775 1.45 2.075l2.2 6.75q.55 1.75.075 3.5Q43.4 20.85 42 22.05ZM28.5 20.5q1.45 0 2.45-.95 1-.95.8-2.3L30.5 9h-5v8.25q0 1.3.85 2.275.85.975 2.15.975Zm-9.35 0q1.4 0 2.375-.95.975-.95.975-2.3V9h-5l-1.25 8.25q-.2 1.3.7 2.275.9.975 2.2.975Zm-9.1 0q1.2 0 2.075-.825.875-.825 1.025-2.025L14.45 9h-5l-2.3 7.3q-.5 1.55.4 2.875t2.5 1.325Zm27.85 0q1.6 0 2.525-1.3.925-1.3.425-2.9L38.55 9h-5l1.3 8.65q.15 1.2 1.025 2.025.875.825 2.025.825ZM8.95 39H39V23.45q.05.05-.325.05H37.9q-1.25 0-2.375-.525T33.3 21.35q-.8 1-2 1.575t-2.65.575q-1.5 0-2.575-.425Q25 22.65 24 21.65q-.75.9-1.9 1.375t-2.6.475q-1.55 0-2.75-.55t-2.05-1.6q-1.2 1.05-2.35 1.6-1.15.55-2.3.55h-.675q-.325 0-.425-.05V39ZM39 39H8.95 39Z" />
          </svg> Metrópolis</div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar en Metrópolis" aria-label="search">
          <button class="btn btn-outline-success" type="submit">Buscar </button>
        </form>
        <a href="carrito-compras.html"><button type="button" class="btn btn-primary position-relative">
            <i class="bi bi-cart2"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </button></a>

      </div>
    </div>

  </nav>
  <div id="mediosb">
    <div id="minisb">
      <div class="d-flex flex-column flex-shrink-0  col divsb" style="width: 4.5rem;">

        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center miul">
          <li class="nav-item">
            <a href="proyectoF.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                <use xlink:href="#home" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                <use xlink:href="#speedometer2" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders">
                <use xlink:href="#table" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                <use xlink:href="#grid" />
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                <use xlink:href="#people-circle" />
              </svg>
            </a>
          </li>

          <div class="dropdown border-top ">
            <a href="formularioIS.php" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">


              <li><a class="dropdown-item" href="#">Ajustes</a></li>
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <form action="cerrarSesion.php" method="post">
                <button name="CS" id="CS" type="submit">Cerrar sesion</button>
              </form>
            </ul>
          </div>
        </ul>
      </div>
      <div class="misP">




        <div class="pa1">
          <script>
            // Función para mostrar la nueva imagen
            function mostrarImagen2(imagen) {
              imagen.dataset.srcOriginal = imagen.src; // Guarda la imagen original en un atributo personalizado
              if (imagen.classList.contains('iphone-image')) {
                imagen.src = "imagenes/Iphone 14/2.png";
              } else if (imagen.classList.contains('portatil-image')) {
                imagen.src = "imagenes/Portatil Gamer/1 (2).png";
              } else if (imagen.classList.contains('tv-image')) {
                imagen.src = "imagenes/Tv/2.png";
              } else if (imagen.classList.contains('airpods-image')) {
                imagen.src = "imagenes/Airpods Pro/2 (1).png";
              } else if (imagen.classList.contains('samsung-image')) {
                imagen.src = "imagenes/Samsung S23 Ultra/1 (2).png";
              } else if (imagen.classList.contains('drone-image')) {
                imagen.src = "imagenes/Drone/1 (2).png";
              } else if (imagen.classList.contains('bici-image')) {
                imagen.src = "imagenes/Bicicleta/1 (2).png";
              } else if (imagen.classList.contains('silla-image')) {
                imagen.src = "imagenes/Silla Gamer/1 (2).png";
              } else if (imagen.classList.contains('carrito-image')) {
                imagen.src = "imagenes/Carrito/1 (2).png";
              } else if (imagen.classList.contains('compu-image')) {
                imagen.src = "imagenes/Computador Gamer/1 (1).png";
              } else if (imagen.classList.contains('reloj-image')) {
                imagen.src = "imagenes/reloj/1 (2).png";
              } else if (imagen.classList.contains('tvh-image')) {
                imagen.src = "imagenes/Tv H/1 (3).png";
              }else if (imagen.classList.contains('tvs-image')) {
                imagen.src = "imagenes/Tv S/1 (1).png";
              }else if (imagen.classList.contains('nevera-image')) {
                imagen.src = "imagenes/Nevera/1 (2).png";
              }else if (imagen.classList.contains('sofa-image')) {
                imagen.src = "imagenes/Sofa/1 (2).png";
              }else if (imagen.classList.contains('ch-image')) {
                imagen.src = "imagenes/Huawei/1 (2).png";
              }else if (imagen.classList.contains('moto-image')) {
                imagen.src = "imagenes/Moto/1 (2).png";
              }else if (imagen.classList.contains('luz-image')) {
                imagen.src = "imagenes/Luz Led/1 (2).png";
              }
            }

            // Función para restaurar la imagen original
            function restaurarImagen(imagen) {
              if (imagen.dataset.srcOriginal) { // Verifica si se guardó una imagen original
                imagen.src = imagen.dataset.srcOriginal; // Restaura la imagen original
              }
            }
          </script>


          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Iphone 14/1.png" style="width: 210px;" class="card-img-top iphone-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Apple</p>
              <h6 class="card-title"><b> Celular Iphone 14 Pro 256Gb 5G Morado</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-12%</span></div><del>$ 6.599.900</del>
              </div>
              </p>
              <strong>$ 5.799.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>



          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Portatil Gamer/1 (6).png" style="width: 210px;" class="card-img-top portatil-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Asus</p>
              <h6 class="card-title"><b>Portátil Gamer ROG Strix G -RAM 16GB -SSD 512GB</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-31%</span></div><del>$ 8.699.900</del>
              </div>
              </p>
              <strong>$ 6.002.931</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Tv/1.png" style="width: 210px;" class="card-img-top tv-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Samsung</p>
              <h6 class="card-title"><b>Televisor SAMSUNG 65 Pulgadas LED Smart TV </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-43%</span></div><del>$ 4.999.990</del>
              </div>
              </p>
              <strong>$ 2.849.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Airpods Pro/1.png" style="width: 210px;" class="card-img-top airpods-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Apple</p>
              <h6 class="card-title"><b>Airpods Pro APPLE MLWK3AM/A </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-5%</span></div><del>$ 1.159.000</del>
              </div>
              </p>
              <strong>$ 1.101.050</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Carrito/1 (1).png" style="width: 210px;" class="card-img-top carrito-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Mercedes Benz</p>
              <h6 class="card-title"><b>Carro Montable Electrico con control remoto</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-30%</span></div><del>$ 2.299.900</del>
              </div>
              </p>
              <strong>$ 1.609.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Drone/1 (1).png" style="width: 210px;" class="card-img-top drone-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">DJI</p>
              <h6 class="card-title"><b>Drone Dji Air 2S Fly More Combo </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-7%</span></div><del>$ 7.999.900</del>
              </div>
              </p>
              <strong>$ 7.439.907</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>
        </div>

        <div class="pa2">
          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Bicicleta/1 (1).png" style="width: 210px;" class="card-img-top bici-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Bianchi</p>
              <h6 class="card-title"><b>Bicicleta Mtb Bianchi Ref Ylb75t531r Ethanol 27 1 Xt</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-30%</span></div><del>$ 8.852.900</del>
              </div>
              </p>
              <strong>$ 6.196.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Silla Gamer/1 (5).png" style="width: 210px;" class="card-img-top silla-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Domtwo</p>
              <h6 class="card-title"><b>Silla Gamer Premium Negro Rojo</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-45%</span></div><del>$ 1.889.900</del>
              </div>
              </p>
              <strong>$ 1.039.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Samsung S23 Ultra/1 (1).png" style="width: 210px;" class="card-img-top samsung-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Samsung</p>
              <h6 class="card-title"><b>Samsung S23 Ultra 256 GB Rosa </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-15%</span></div><del>$ 6.999.900</del>
              </div>
              </p>
              <strong>$ 5.949.915</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>


          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Computador Gamer/Captura de pantalla 2023-05-21 194442.png" style="width: 210px;" class="card-img-top compu-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Intel</p>
              <h6 class="card-title"><b>PC GAMER IMMORTALS MONITOR 24" SAMSUNG</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-33%</span></div><del>$ 4.535.000</del>
              </div>
              </p>
              <strong>$ 2.999.899</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/reloj/1 (1).png" style="width: 210px;" class="card-img-top reloj-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Xiaomi</p>
              <h6 class="card-title"><b>Redmi Watch 3 Blanco XIAOMI </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-5%</span></div><del>$ 529.900</del>
              </div>
              </p>
              <strong>$ 498.106</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>


          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Tv H/1 (1).png" style="width: 210px;" class="card-img-top tvh-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Hisense</p>
              <h6 class="card-title"><b>Televisor HISENSE 75 Pulgadas LED Smart TV </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-41%</span></div><del>$ 5.499.900</del>
              </div>
              </p>
              <strong>$ 3.244.941</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

        </div>
        

        <div class="pa3">
          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Tv S/1 (2).png" style="width: 210px;" class="card-img-top tvs-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Samsung</p>
              <h6 class="card-title"><b>Televisor Curvo 163cm 65" 4K UHD Smart TV </b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-10%</span></div><del>$ 2.899.900</del>
              </div>
              </p>
              <strong>$ 2.600.000</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Nevera/1 (1).png" style="width: 210px;" class="card-img-top nevera-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">LG</p>
              <h6 class="card-title"><b>Nevecon LG Tipo Europeo 816L</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-8%</span></div><del>$ 6.889.935</del>
              </div>
              </p>
              <strong>$ 6.339.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Sofa/1 (1).png" style="width: 210px;" class="card-img-top sofa-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">DKO DESIGN SAS</p>
              <h6 class="card-title"><b>Set Chaise Long, Puff, Mesa Para Tv Y Mesa De Centro</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-21%</span></div><del>$ 3.624.900</del>
              </div>
              </p>
              <strong>$ 2.879.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>


          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Huawei/1 (1).png" style="width: 210px;" class="card-img-top ch-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Huawei</p>
              <h6 class="card-title"><b>HUAWEI nova Y90 128 GB Azul</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-18%</span></div><del>$ 1.499.900</del>
              </div>
              </p>
              <strong>$ 1.229.900</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Moto/1 (1).png" style="width: 210px;" class="card-img-top moto-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Auteco</p>
              <h6 class="card-title"><b>Moto Electrica Kids AUTECO 61000793</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-5%</span></div><del>$ 1.999.000</del>
              </div>
              </p>
              <strong>$ 1.900.000</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>


          <div class="card1" style="width: 13.3rem;">
            <img src="imagenes/Luz Led/1 (1).png" style="width: 210px;" class="card-img-top luz-image" onmouseover="mostrarImagen2(this)" onmouseout="restaurarImagen(this)" alt="...">

            <div class="card-body">
              <p class="marca">Generico</p>
              <h6 class="card-title"><b>Luces Led, Control Adaptador Y Aplicacion Smart</b></h6>

              <p class="card-text">
              <div class="miCardProd">
                <div class="cuadrado"><span class="descuento">-49%</span></div><del>$ 80.000</del>
              </div>
              </p>
              <strong>$ 40.742</strong>
              <a href="metropolisProd.php" class="btn btn-primary">Agregar <i class="bi bi-cart2"></i></a>
            </div>
          </div>

        </div>
        <div>

        

        <div class="mifoo" style="background-image: url('imagenes/footer2.png'); background-size: cover;">
          <div class="containerF">
            <div class="textC">
              <h4>Contáctanos</h4>
              <p class="pF">Ventas telefónicas (601) 4242400</p>
              <p class="pF">Ventas Whatsapp (+57) 305 482 9046</p>
              <p class="pF">Servicio al cliente Whatsapp (+57) 305 261 5442</p>
              <p class="pF">Línea de servicio al cliente nacional: 01 8000 428 800</p>

            </div>

            <div>
              <div>
                <div class="fc">

                  <div class="col-md-5 offset-md-1 mb-3" id="suggestions">
                    <form>
                      <h5><i class="bi bi-envelope"></i>Sugerencias</h5>
                      <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Sugerencias</label>
                        <input id="newsletter1" name="suggestion" type="text" class="form-control" placeholder="Ingresa tu sugerencia" required>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="rS">
                  <h4>Siguenos en:
                    <ul class="list-unstyled d-flex">
                      <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li>
                      <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
                      <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <script>
            document.querySelector('#suggestions form').addEventListener('submit', function(event) {
              event.preventDefault(); // Evita el envío del formulario por defecto

              // Obtén el valor del campo de texto
              var suggestion = document.querySelector('#suggestions input[name="suggestion"]').value;

              // Realiza alguna acción con la sugerencia, como enviarla a través de una solicitud HTTP

              // Muestra un mensaje de confirmación
              alert('¡Gracias por tu sugerencia!');

              // Limpia el campo de texto
              document.querySelector('#suggestions input[name="suggestion"]').value = '';
            });
          </script>

          <footer class="mifooter">
            <div class="d-flex flex-column flex-direction: row !important;justify-content-between border-top mF">
              <p class="dR">Todos los derechos reservados &copy; 2023 Metrópolis</p>

            </div>
          </footer>
        </div>
      </div>



</body>

</html>