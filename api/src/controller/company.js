const Company = require('../../db/models').Company;
module.exports = {
    create(req, res) {
        return Company.create({
            name: req.body.name
        })
            .then(company => res.status(200).send(company))
            .then(error => res.status(400).send(error));
    },
    getAll(req, res) {
        return Company.findAll()
            .then(company => res.status(200).send(company))
            .then(error => res.status(400).send(error));
    }
}