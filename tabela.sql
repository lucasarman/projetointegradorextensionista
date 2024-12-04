USE status;

CREATE TABLE disponibilidade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    status ENUM(
        'Disponível',
        'Trabalhando',
        'Em Pausa',
        'Fora do Horário'
    ) NOT NULL,
    area ENUM(
        'FRONTEND',
        'BACKEND',
        'FULLSTACK'
    ) NOT NULL,
    experiencia TEXT
);