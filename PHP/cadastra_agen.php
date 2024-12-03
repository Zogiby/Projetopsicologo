<form action="agendamentos.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" min="0" required>

                <label for="data">Data para agendamento:</label>
                <input type="date" id="dia" name="dia" required>

                <label for="horario">Horário:</label>
                <select id="horario" name="horario" required>
                    <option value="" disabled selected>Escolha um horário</option>
                    <optgroup label="Manhã">
                        <option value="07:00">7:00</option>
                        <option value="09:00">9:00</option>
                        <option value="11:00">11:00</option>
                    </optgroup>
                    <optgroup label="Tarde">
                        <option value="13:00">13:00</option>
                        <option value="15:00">15:00</option>
                        <option value="18:00">18:00</option>
                    </optgroup>
                </select>


                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Apenas números" required>

                <button type="submit">Enviar</button>
</form>