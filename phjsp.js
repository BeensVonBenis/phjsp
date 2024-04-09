async function betterFetch(code) {
  const res = await fetch("http://localhost/projekty/phjsp/phjsp.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ script: code }),
  });
  const data = await res.text();
  return data;
}
