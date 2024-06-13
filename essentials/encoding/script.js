function codierenDecodieren() {
            var s = document.getElementById('string').value;
            var operation = document.getElementById('operation').value;
            var verschiebung = document.getElementById('verschiebung').value;

            if (!s || !operation || !verschiebung) {
                alert('Bitte füllen Sie alle Felder aus.');
                return;
            }

            var normal = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            var verschiebungSum = 0;
            for (var i = 0; i < verschiebung.length; i++) {
                verschiebungSum += verschiebung.toUpperCase().charCodeAt(i);
            }
            verschiebungSum %= 26;
            var codiert = normal.slice(verschiebungSum) + normal.slice(0, verschiebungSum);

            var trans = {};
            if (operation.toLowerCase() === 'c') {
                for (var i = 0; i < normal.length; i++) {
                    trans[normal[i]] = codiert[i];
                    trans[normal[i].toLowerCase()] = codiert[i].toLowerCase();
                }
            } else if (operation.toLowerCase() === 'd') {
                for (var i = 0; i < normal.length; i++) {
                    trans[codiert[i]] = normal[i];
                    trans[codiert[i].toLowerCase()] = normal[i].toLowerCase();
                }
            } else {
                alert("Ungültige Operation. Bitte wählen Sie 'c' für codieren oder 'd' für decodieren.");
                return;
            }

            var result = '';
            for (var i = 0; i < s.length; i++) {
                if (s[i] in trans) {
                    result += trans[s[i]];
                } else {
                    result += s[i];
                }
            }

            alert("Ergebnis: " + result);
        }
